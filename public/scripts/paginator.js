const rooms = document.getElementsByClassName('room__card');
const section = document.getElementsByClassName('rooms')[0];

const numRooms = rooms.length;
const roomsPerPage = 9;
let page = 1;

const pages = Math.ceil(numRooms / roomsPerPage);

const prevPage = () => {
    if (page > 1) {
        page--;
    }
}

const nextPage = () => {
    if (page < pages) {
        page++;
    }
}

const specificPage = (n) => {
    if (n >= 1 && n <= pages) {
        page = n;
    }   
}


const createPaginatorButton = (parent, classes, text) => {
    const newElement = document.createElement("button");
    newElement.className = classes;
    const newElementText = document.createTextNode(text);
    newElement.appendChild(newElementText);
    switch (text) {
        case "‹‹":
            newElement.addEventListener('click', prevPage());
            break;
        case "››":
            newElement.addEventListener('click', nextPage());
            break;
        default:
            newElement.addEventListener('click', specificPage(parseInt(text)));
    }
    parent.appendChild(newElement);
}

const paginatorContainer = document.createElement("div");
paginatorContainer.className = "paginator";

const classes = "paginator__element paginator__text";

for (let i = 0; i <= pages+1; i++) {

    if (i === 0) {
        createPaginatorButton(paginatorContainer, classes, "‹‹");
    } else if (i === pages+1) {
        createPaginatorButton(paginatorContainer, classes, "››");
    } else {
        createPaginatorButton(paginatorContainer, classes, `${i}`);
    }
}

section.appendChild(paginatorContainer);
