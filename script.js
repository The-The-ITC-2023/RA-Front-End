var submit = document.querySelector("submit");
const phpOutput = "<?php echo $nice; ?>";


submit.addEventListener("click", updateUrMom);

function updateUrMom () {
    const result = document.getElementById("result");
    const phpOutput = "<?php echo $nice; ?>";
    result.innerHTML=phpOutput;
    console.log("Ayo");
}