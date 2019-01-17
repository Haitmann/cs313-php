function btnClick() {
    alert('Clicked!');
}

function changeColor() {
     $("#box-1").css('background-color', $("#color").val());
}

function toggleDiv3() {
    console.log($("#box-3"));
    $("#box-3").fadeToggle();
}