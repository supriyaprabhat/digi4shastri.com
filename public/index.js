const tabs = [
  { button: document.getElementById("tab1"), content: document.getElementById("opentab1") },
  { button: document.getElementById("tab2"), content: document.getElementById("opentab2") }
];

const tabs2 = [
  { button: document.getElementById("tab3"), content: document.getElementById("opentab3") },
  { button: document.getElementById("tab4"), content: document.getElementById("opentab4") },
  { button: document.getElementById("tab5"), content: document.getElementById("opentab5") }
];
const tabs3 = [
  { content: document.getElementById("story1") },
  {  content: document.getElementById("story2") },
  {  content: document.getElementById("story3") },
  { content: document.getElementById("story4") },
  {  content: document.getElementById("story5") }
];

const filter = document.getElementById("filter");

function showFilter(){
  filter.classList.toggle("!w-[80vw]");
  filter.classList.toggle("p-6");
}

function hidpop(){
  document.getElementById("pop").style.display = "none";
}

function toggleTab(index) {
  tabs.forEach((tab, i) => {
    tab.button.classList.toggle("active", i === index);
    tab.content.classList.toggle("hid", i !== index);
  });
}

function toggleTab2(index) {
  tabs2.forEach((tab, i) => {
    tab.button.classList.toggle("active", i === index);
    tab.content.classList.toggle("hid", i !== index);
  });
}

function toggleModule(element) {
  const module = element.closest('.module');
  const content = module.querySelector('.list-disc');
  content.style.display = content.style.display === 'block' ? 'none' : 'block';
}

function togglestory(index) {
  tabs3.forEach((tab, i) => {
    tab.content.classList.toggle("hid", i !== index);
  });
}


function initFAQ() {
  const questions = document.querySelectorAll('.question');
  
  questions.forEach(question => {
    question.addEventListener('click', () => {
      // Remove 'active' class from all question parents
      questions.forEach(q => {
        q.parentNode.classList.remove('active');
      });
      
      // Add 'active' class to the clicked question's parent after a short delay
      setTimeout(() => {
        question.parentNode.classList.add('active');
      }, 400); // 400 milliseconds delay
    });
  });
}

document.addEventListener("DOMContentLoaded", () => {
  const hamMenu = document.querySelector(".ham-menu");
  const dropdowns = document.querySelectorAll(".hamMenuDropdown");
  const offScreenMenu = document.querySelector(".off-screen-menu");

  initFAQ();
  hamMenu.addEventListener("click", () => {
    hamMenu.classList.toggle("active");
    offScreenMenu.classList.toggle("active");
  });

  dropdowns.forEach(dropdown => {
    dropdown.addEventListener("click", (e) => {
      e.stopPropagation(); // Prevent event from bubbling up to parent dropdowns
      const parent = e.target.closest("li");
      const dropdownContainer = parent.querySelector(".hamDropdownContainer");

      // Toggle the current dropdown
      dropdownContainer.classList.toggle("open-dropdown");

      // If the current dropdown is open, ensure all ancestor dropdowns remain open
      if (dropdownContainer.classList.contains("open-dropdown")) {
        let ancestor = parent.parentElement.closest("li");
        while (ancestor) {
          ancestor.querySelector(".hamDropdownContainer").classList.add("open-dropdown");
          ancestor = ancestor.parentElement.closest("li");
        }
      } else {
        // Close all nested dropdowns
        parent.querySelectorAll(".hamDropdownContainer").forEach(container => {
          container.classList.remove("open-dropdown");
        });
      }
    });
  });

 
  function initMarquees() {
    const containers = document.getElementsByClassName('marqueeContainer');
    const contents = document.getElementsByClassName('marqueeContent');

    if (containers.length === 0 || contents.length === 0) {
      console.error('Marquee containers or content not found.');
      return; // Exit if marquee elements are not found
    }

    // Iterate over each marquee container and content pair
    for (let i = 0; i < containers.length; i++) {
      const container = containers[i];
      const content = contents[i];

      // Set different speed for each slider
      const normalSpeed = i === 0 ? 2.5 : 2; // First slider: 2.5, Second slider: 1.5
      let currentSpeed = normalSpeed;
      const slowSpeed = i === 0 ? 1 : 0.5;     // First slider: 1, Second slider: 0.5

      let position = container.offsetWidth;

      function moveMarquee() {
        position -= currentSpeed;
        if (position <= -content.offsetWidth) {
          position = container.offsetWidth;
        }
        content.style.transform = `translateX(${position}px)`;
        requestAnimationFrame(moveMarquee);
      }

      container.addEventListener('mouseover', function () {
        currentSpeed = slowSpeed;
      });

      container.addEventListener('mouseout', function () {
        currentSpeed = normalSpeed;
      });

      moveMarquee();
    }
  }

  initMarquees();


}
);

