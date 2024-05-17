const items = document.querySelectorAll(".accordion button");
const addQuestionButton = document.getElementById("addQuestion");
const validateButton = document.getElementById("validateEdits");

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  
  for (let i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }
  
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  } else {
    this.setAttribute('aria-expanded', 'false');
  }
}

function addNewQuestion() {
  const accordion = document.querySelector(".accordion");
  const newItem = document.createElement('div');
  newItem.className = 'accordion-item';
  newItem.innerHTML = `
    <button aria-expanded="false">
      <span class="accordion-title" contenteditable="true">Nouvelle question</span>
      <span class="icon" aria-hidden="true"></span>
    </button>
    <div class="accordion-content" contenteditable="true">
      <p>Nouvelle réponse.</p>
    </div>
  `;
  accordion.appendChild(newItem);

  newItem.querySelector('button').addEventListener('click', toggleAccordion);
}

function validateEdits() {
  const activeItem = document.querySelector(".accordion button[aria-expanded='true']");
  if (activeItem) {
    const editedTitle = activeItem.querySelector('.accordion-title').innerText;
    const editedContent = activeItem.nextElementSibling.querySelector('.accordion-content');

    // Mettre à jour le texte et rendre non modifiable
    activeItem.querySelector('.accordion-title').innerText = editedTitle;
    activeItem.querySelector('.accordion-title').setAttribute('contenteditable', 'false');
    editedContent.innerText = editedContent.innerText;
    editedContent.setAttribute('contenteditable', 'false');

    console.log("Question éditée:", editedTitle);
    console.log("Réponse éditée:", editedContent.innerText);
  }
}

function setupNewAccordionItems() {
  const newItems = document.querySelectorAll(".accordion-item:not([data-setup])");
  newItems.forEach(item => {
    item.setAttribute('data-setup', 'true');
    item.querySelector('button').addEventListener('click', toggleAccordion);
  });
}

items.forEach(item => item.addEventListener('click', toggleAccordion));
addQuestionButton.addEventListener('click', () => {
  addNewQuestion();
  setupNewAccordionItems();
});

validateButton.addEventListener('click', validateEdits);
