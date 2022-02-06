console.log("再生する？")

window.onload = () => {
    const se = document.querySelector('#demo_sound');
    document.querySelector("#demo_btn").addEventListener("click", () => {
        se.play();
        console.log("再生された")
    });
};