import '../css/app.css';
import './bootstrap';

const dropdownButton = document.getElementById('dropdown-button');
const dropdownList = document.getElementById('dropdown-list');
const noteBodies = document.querySelectorAll('#note-body');

const sidebarTrigger = document.querySelector("#sidebar-trigger");
const sidebarClose = document.querySelector("#sidebar-close");
const sidebarMobile = document.querySelector("#sidebar-mobile");

sidebarTrigger.addEventListener('click', () => {
    sidebarMobile.classList.replace('hidden', 'flex');
});

sidebarClose.addEventListener('click', () => {
    sidebarMobile.classList.replace('flex', 'hidden');
});

const truncateText = (text, maxLength) => {
    if (text.length > maxLength) {
        return text.substring(0, maxLength) + '...';
    }
    return text;
}

noteBodies.forEach(note => {
    note.innerText = truncateText(note.innerText, 25);
});

dropdownButton.addEventListener('click', (e) => {
    e.stopPropagation(); // Prevent the document click from immediately closing the dropdown
    dropdownList.classList.replace('hidden', 'flex');
});

// Close dropdown when clicking outside
document.addEventListener('click', (e) => {
    if (!dropdownButton.contains(e.target) && !dropdownList.contains(e.target)) {
        dropdownList.classList.replace('flex', 'hidden');
    }
});

const deleteBtn = document.querySelector('#delete-btn');
const deleteBtnAccept = document.querySelector('#delete-btn-accept');
const cancelBtn = document.querySelector('#cancel-btn');
const modal = document.querySelector('#modal');

deleteBtn.addEventListener('click', () => {
    modal.classList.replace('hidden', 'flex');
    dropdownList.classList.replace('flex', 'hidden');
});

deleteBtnAccept.addEventListener('click', () => {
    modal.classList.replace('flex', 'hidden');
});

cancelBtn.addEventListener('click', () => {
    modal.classList.replace('flex', 'hidden');
});




