const video = document.getElementById('myVideo');
const videoSource = document.getElementById('videoSource');
const changeButtons = [
  document.getElementById('changeButton'),
  document.getElementById('changeButton1'),
  document.getElementById('changeButton2'),
  document.getElementById('changeButton3')
];

const videoSources = ['html.mp4', 'css.mp4', 'js.mp4', 'php.mp4'];

for (let i = 0; i < changeButtons.length; i++) {
  changeButtons[i].addEventListener('click', function() {
    videoSource.src = videoSources[i];
    video.load();
    // video.play();
  });
}



  const languages = ["HTML", "Java Script", "CSS", "PHP"];

function myFunction(index) {
    document.getElementById("demo").innerHTML = languages[index];
}
