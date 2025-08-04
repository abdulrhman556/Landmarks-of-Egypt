let tColorA = document.getElementById('tColorA'),
    tColorB = document.getElementById('tColorB'),
    tColorC = document.getElementById('tColorC'),
    iconA = tColorA.querySelector('.fa-solid'),
    iconB = tColorB.querySelector('.fa-solid'),
    iconC = tColorC.querySelector('.fa-solid'),
    cDetails = document.querySelector('.card-details'),
    bankDetails = document.querySelector('.bank-details'),
    walletDetails = document.querySelector('.wallet-details');

function resetColors() {
    [tColorA, tColorB, tColorC].forEach(el => el.style.color = "#444");
    [iconA, iconB, iconC].forEach(el => el.style.color = "#aaa");
}

function dofun() {
    resetColors();
    tColorA.style.color = "rgb(255, 166, 0)";
    iconA.style.color = "rgb(255, 166, 0)";
    cDetails.style.display = "block";
    bankDetails.style.display = "none";
    walletDetails.style.display = "none";
}

function dofunA() {
    resetColors();
    tColorB.style.color = "rgb(255, 166, 0)";
    iconB.style.color = "rgb(255, 166, 0)";
    cDetails.style.display = "none";
    bankDetails.style.display = "block";
    walletDetails.style.display = "none";
}

function dofunB() {
    resetColors();
    tColorC.style.color = "rgb(255, 166, 0)";
    iconC.style.color = "rgb(255, 166, 0)";
    cDetails.style.display = "none";
    bankDetails.style.display = "none";
    walletDetails.style.display = "block";
}
