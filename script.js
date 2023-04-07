var submit = document.querySelector("#submit");
const phpOutput = "<?php echo $nice; ?>";
const result = document.getElementById("result");
console.log(result);
console.log("running");
console.log(submit);

function updateUrMom () {
    console.log("Ayo");
    const phpOutput = "<?php echo $nice; ?>";
    result.innerHTML=phpOutput;
    console.log("Ayo");
}

submit.addEventListener("click", updateUrMom);
