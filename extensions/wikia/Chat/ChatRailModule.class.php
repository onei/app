<?php
class ChatRailModule extends Module {
	const MAX_AVATARS_TO_SHOW = 6;
	const AVATAR_SIZE = 32;
	var $linkToSpecialChat;
	var $windowFeatures;
	var $chatHeadline;
	var $profileAvatar;
	var $totalInRoom;
	var $avatarsInRoom;
	var $buttonIconUrl;
	var $buttonText;

	/**
	 * Render module
	 */
	public function executeChatEntry(){
		global $wgUser, $wgSitename, $wgOut, $wgExtensionsPath;
		wfProfileIn( __METHOD__ );

		// Main variables
		$this->linkToSpecialChat = SpecialPage::getTitleFor("Chat")->escapeLocalUrl();
		$this->windowFeatures = $this->getWindowFeatures();
		$this->chatHeadline = wfMsg('chat-headline', $wgSitename);
		$this->profileAvatar = AvatarService::renderAvatar($wgUser->getName(), 32);
		
		// List of other people in chat
		$this->totalInRoom = 0;
		$roomName = $roomTopic = ""; // just needed for pass-by-reference... will be ignored
		$roomId = NodeApiClient::getDefaultRoomId($roomName, $roomTopic); // get id of default chat for the wiki
		$this->avatarsInRoom = NodeApiClient::getAvatarsInRoom( $roomId,
																ChatRailModule::MAX_AVATARS_TO_SHOW,
																$this->totalInRoom,
																ChatRailModule::AVATAR_SIZE );

		// Button setup
		$this->buttonIconUrl = $wgExtensionsPath .'/wikia/Chat/images/chat_icon.png';
		if ( !empty($this->totalInRoom) ) {
			$this->buttonText = wfMsg('chat-join-the-chat');
		} else {
			$this->buttonText = wfMsg('chat-start-a-chat');		
		}

		// Add CSS for rail module
		$wgOut->addStyle(AssetsManager::getInstance()->getSassCommonURL('/extensions/wikia/Chat/css/ChatRailModule.scss'));	

		wfProfileOut( __METHOD__ );
	}

	/**
	 * Return string of window features
	 */
	private function getWindowFeatures() {
		$width = 600;
		$height = 600;
		$windowFeatures = 'width='.$width.',height='.$height;
		$windowFeatures.= ',menubar=no,status=no,location=no,toolbar=no';
		$windowFeatures.= ',scrollbars=no,resizable=yes';

		return $windowFeatures;	
	}
}
