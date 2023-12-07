let thuocBHYTSelect = document.getElementById("thuoc_bhyt_select")
let thuocBanSelect = document.getElementById("thuoc_ban_select")

let thuocBHYTInput = document.getElementById("thuocbhyt_sl")
let thuocBanInput = document.getElementById("thuocban_sl")

let thuocBHYTOption = document.querySelectorAll(".thuocbhyt_option")
let thuocBanOption =document.querySelectorAll(".thuoc_ban_option")

thuocBHYTInput.max = thuocBHYTOption[0].getAttribute("lieuToiDa");
thuocBanInput.max = thuocBanOption[0].getAttribute("lieuToiDa");

thuocBHYTSelect.addEventListener("change", (e) => {
    let lieuMax = thuocBHYTOption[e.target.value -1].getAttribute("lieuToiDa");
    console.log(lieuMax);
    thuocBHYTInput.max = lieuMax
});
thuocBanSelect.addEventListener("change", (e) => {
    let lieuMax = thuocBanOption[e.target.value -1].getAttribute("lieuToiDa");
    console.log(lieuMax);
    thuocBanInput.max = lieuMax
});

