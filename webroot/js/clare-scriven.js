const demoAudio = {
    id: 1,
    name: 'The Weatherman (Chorus)',
    totalDuration: 28,
    currentDuration: 0,
    location: 'webroot/music/tw-chorus-clip.wav'
}

const audioFileList = [{
    id: 2,
    name: 'Coming Down',
    totalDuration: 172,
    currentDuration: 0,
    location: 'webroot/music/coming-down.wav'
},
{
    id: 3,
    name: 'The Weatherman',
    totalDuration: 190,
    currentDuration: 0,
    location: 'webroot/music/the-weatherman.wav'
}];

document.addEventListener('click', function(event) {
    const hiddenDiv = document.getElementById('mobile-nav');
    const menuButton = document.getElementById('mobile-nav-button');
    if (!menuButton.contains(event.target) && !hiddenDiv.contains(event.target) && hiddenDiv.classList.contains('show-mobile-list')) {
        hiddenDiv.classList.add('hide-mobile-list');
        hiddenDiv.classList.remove('show-mobile-list');
    }
})

function showMobileNavList () {
    const hiddenDiv = document.getElementById('mobile-nav');
    if (hiddenDiv.classList.contains('hide-mobile-list')) {
        hiddenDiv.classList.add('show-mobile-list');
        hiddenDiv.classList.remove('hide-mobile-list');
    } else {
        hiddenDiv.classList.add('hide-mobile-list');
        hiddenDiv.classList.remove('show-mobile-list');
    }
}

function closeMobileNavList () {
    const hiddenDiv = document.getElementById('mobile-nav');
    hiddenDiv.classList.add('hide-mobile-list');
    hiddenDiv.classList.remove('show-mobile-list');
}

function displayAllAudios () {
    displayAudioList();
    displayDemoAudio();
}

function displayDemoAudio () {
    const audioList = document.getElementById('demo-audio');
    audioList.innerHTML = ''; // Clear previous content
    const audioGroup = createAudioContent(demoAudio);
    audioList.appendChild(audioGroup);
}

function displayAudioList () {
    const audioList = document.getElementById('audio-list');
    audioList.innerHTML = ''; // Clear previous content
    audioFileList.forEach((audio) => {
        const audioGroup = createAudioContent(audio);
        audioList.appendChild(audioGroup);
    })
}

function createAudioContent (audio) {
    // the audio item to be added to the list in the html page for each audio
    const audioGroup = document.createElement('div');
    audioGroup.classList.add('audio-group');
    audioGroup.setAttribute('id', `audio-group-${audio.id}`);
    // the div for the button for the audio
    const audioButton = document.createElement('div');
    audioButton.classList.add('audio-buttons');
    // the button to be displayed for the audio (starts off as play button)
    const buttonItem = document.createElement('button');
    buttonItem.type = 'button';
    buttonItem.classList.add('btn', 'list-button', 'play-button');
    buttonItem.setAttribute('id', `audio-button-${audio.id}`);
    const buttonContent = document.createElement('i');
    buttonContent.classList.add('bi', 'bi-play-fill');
    buttonItem.appendChild(buttonContent);
    buttonItem.addEventListener('click', () => clickPlayButton(audio.id));
    // add the play button to the audio div
    audioButton.appendChild(buttonItem);
    // add the all the audio div with play button included to the group div for the item
    audioGroup.appendChild(audioButton);
    // now add name to audio group div
    const audioName = document.createElement('div');
    audioName.classList.add('audio-name');
    const nameSpan = document.createElement('span');
    nameSpan.textContent = audio.name;
    // add the audio tag along with the name to be able to display the audio file
    const audioContent = document.createElement('audio');
    audioContent.src = audio.location;
    audioContent.type = 'audio/wav';
    audioContent.setAttribute('id', `audio-file-${audio.id}`);
    audioContent.addEventListener('timeupdate', () => updateDuration(audio));
    audioContent.addEventListener('ended', () => audioEnded(audio.id));
    audioName.appendChild(nameSpan);
    audioName.appendChild(audioContent);
    audioGroup.appendChild(audioName);
    // now add duration to audio with the current time played and the total duration
    const durationContent = document.createElement('div');
    durationContent.classList.add('audio-duration');
    const durationSpan = document.createElement('span');
    durationSpan.setAttribute('id', `audio-duration-${audio.id}`)
    durationSpan.textContent = `${formatTime(audio.currentDuration)}/${formatTime(audio.totalDuration)}`;
    durationContent.appendChild(durationSpan);
    audioGroup.appendChild(durationContent);
    return audioGroup;
}

function clickPlayButton (audioId) {
    const clickedButton = document.getElementById(`audio-button-${audioId}`);
    const buttonIcon = clickedButton.querySelector('i');
    const audioPlayer = document.getElementById(`audio-file-${audioId}`);
    if (buttonIcon.classList.contains('bi-play-fill')) {
        showPauseButton(buttonIcon);
        audioPlayer.play();
    } else {
        showPlayButton(buttonIcon);
        audioPlayer.pause();
    }
}

function updateDuration (audio) {
    const durationSpan = document.getElementById(`audio-duration-${audio.id}`);
    const audioPlayer = document.getElementById(`audio-file-${audio.id}`);
    durationSpan.textContent = `${formatTime(audioPlayer.currentTime)}/${formatTime(audio.totalDuration)}`
}

function audioEnded (audioId) {
    const clickedButton = document.getElementById(`audio-button-${audioId}`);
    const buttonIcon = clickedButton.querySelector('i');
    showPlayButton(buttonIcon);
}

function showPlayButton (buttonIcon) {
    buttonIcon.classList.remove('bi-pause-fill');
    buttonIcon.classList.add('bi-play-fill');
}

function showPauseButton (buttonIcon) {
    buttonIcon.classList.remove('bi-play-fill');
    buttonIcon.classList.add('bi-pause-fill');
}

function formatTime(seconds) {
    const minutes = Math.floor(seconds / 60);
    const remainingSeconds = Math.floor(seconds % 60);
    return `${minutes}:${remainingSeconds < 10 ? '0' : ''}${remainingSeconds}`;
}