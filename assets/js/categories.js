// Limit = 6;
// Page 1: 0->5
// Page 2: 6->11
// Page 3: 12->17
// page 4: 18->24

// beginGet = limit*(page-1);
// endGet = limit*page-1;

let thisPage = 1;
let limit = 6;
let list = document.querySelectorAll('.seli-list .seli-card');

function loadCard(){
    let beginGet = limit * (thisPage - 1);
    let endGet = limit * thisPage - 1;
    list.forEach((seliCard, key) => {
        if(key >= beginGet && key <= endGet){
            seliCard.style.display = 'block'
        }else{
            seliCard.style.display = 'none';
        }
    })
    listPage();
}
loadCard();

function listPage(){
    let count = Math.ceil(list.length / limit);
    document.querySelector('.pagination').innerHTML = '';

    if(thisPage != 1){
        let prev = document.createElement('li');
        prev.innerText = '<';
        prev.setAttribute('onclick', "changePage(" + (thisPage - 1) + ")");
        document.querySelector('.pagination').appendChild(prev);
    }

    for(i = 1; i <= count; i++){
        let newPage = document.createElement('li');
        newPage.innerHTML = i;
        if(i == thisPage){
            newPage.classList.add('active');
        }
        newPage.setAttribute('onclick', "changePage(" + i + ")");
        document.querySelector('.pagination').appendChild(newPage);
    }

    if(thisPage !== count){
        let next = document.createElement('li');
        next.innerText = '>';
        next.setAttribute('onclick', "changePage(" + (thisPage + 1) + ")");
        document.querySelector('.pagination').appendChild(next);
    }
}

function changePage(i){
    thisPage = i;
    loadCard();
}