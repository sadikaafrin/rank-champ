$(document).ready(function () {
  // =============== dashboard sidebar accordion collapsed svg toggle function starts ============== //

  const navLink = document.querySelectorAll(".dashboard-menu-row");
  const accordionButton = document.getElementById("sm-accordion-button");
  const collapseOne = document.getElementById("collapseOne");
  const accordionSvgContainer = document.getElementById(
    "main-accordion-svg-container"
  );

  if (accordionButton && accordionSvgContainer) {
    accordionButton.addEventListener("click", () => {
      const isExist = accordionButton.classList.contains("collapsed");

      if (isExist) {
        accordionSvgContainer.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M2.49998 4H21.5C22.8807 4 24 5.11928 24 6.49998V17.5C24 18.8807 22.8807 20 21.5 20H2.49998C1.11928 20 0 18.8807 0 17.5V6.50003C0 5.11928 1.11928 4 2.49998 4Z" fill="#909090"/>
  <path d="M0 7H24V11H0V7Z" fill="#323232"/>
  <path d="M7.5 15H3.50002C3.22388 15 3 14.7762 3 14.5C3 14.2239 3.22388 14 3.50002 14H7.5C7.77614 14 8.00002 14.2239 8.00002 14.5C8.00002 14.7762 7.77614 15 7.5 15ZM10.5 17H3.50002C3.22388 17 3 16.7762 3 16.5C3 16.2239 3.22388 16 3.50002 16H10.5C10.7761 16 11 16.2239 11 16.5C11 16.7762 10.7761 17 10.5 17Z" fill="#323232"/>
</svg>
                              <h4>My sales dashboard</h4>`;
      } else {
        accordionSvgContainer.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M2.49998 4H21.5C22.8807 4 24 5.11928 24 6.49998V17.5C24 18.8807 22.8807 20 21.5 20H2.49998C1.11928 20 0 18.8807 0 17.5V6.50003C0 5.11928 1.11928 4 2.49998 4Z" fill="url(#paint0_linear_5059_3345)"/>
  <path d="M0 7H24V11H0V7Z" fill="#323232"/>
  <path d="M7.5 15H3.50002C3.22388 15 3 14.7762 3 14.5C3 14.2239 3.22388 14 3.50002 14H7.5C7.77614 14 8.00002 14.2239 8.00002 14.5C8.00002 14.7762 7.77614 15 7.5 15ZM10.5 17H3.50002C3.22388 17 3 16.7762 3 16.5C3 16.2239 3.22388 16 3.50002 16H10.5C10.7761 16 11 16.2239 11 16.5C11 16.7762 10.7761 17 10.5 17Z" fill="#323232"/>
  <defs>
    <linearGradient id="paint0_linear_5059_3345" x1="11.9905" y1="-20.6666" x2="11.9906" y2="20" gradientUnits="userSpaceOnUse">
      <stop stop-color="#FFF771"/>
      <stop offset="1" stop-color="#E79A09"/>
    </linearGradient>
  </defs>
</svg>
                              <h4>My sales dashboard</h4>`;
      }
    });
  }

  // =============== dashboard sidebar accordion collapsed svg toggle function ends ============== //

  // ============== dynamic table color starts =================//

  const tableRow = document.querySelectorAll(".tracking-status");
  const tableRowContainer = document.querySelectorAll(".table-body-row");
  if(tableRow && tableRowContainer) {

    tableRow.forEach((element) => {
      const innertext = element.innerHTML;
  
      if (innertext === "Pending" || innertext === "Declined") {
        element.parentElement.parentElement.parentElement.style.backgroundColor =
          "#4B4B4B";
      } else {
        tableRowContainer.forEach((item) => {
          item.parentElement.parentElement.parentElement.style.backgroundColor =
            "#1D1D1D";
          element.parentElement.parentElement.nextElementSibling.children[0].style.backgroundColor =
            "#4B4B4B";
          element.parentElement.parentElement.nextElementSibling.children[1].style.backgroundColor =
            "#4B4B4B";
        });
      }
    });
  }


  // ============== dynamic table color ends =================//

  //====================  testing  =========== //

  const editIcon = document.querySelectorAll(".client-svg-edit-icon");

  if(editIcon) {
    editIcon.forEach((item) => {
      item.addEventListener("click", () => {
        
        item.parentElement.parentElement.parentElement.parentElement.children[1].style.display = 'flex'
        item.parentElement.children[1].innerHTML = `<div class="client-price-input-and-svg-wrapper">
                        <input value="20%" class="client-price-input" type="text">
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 19 18" fill="none">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M9.4996 1.1297C11.5635 1.167 13.5303 2.01308 14.9768 3.48587C16.4232 4.95866 17.2336 6.94043 17.2336 9.0047C17.2336 11.069 16.4232 13.0507 14.9768 14.5235C13.5303 15.9963 11.5635 16.8424 9.4996 16.8797C7.43567 16.8424 5.46886 15.9963 4.02245 14.5235C2.57603 13.0507 1.76562 11.069 1.76562 9.0047C1.76562 6.94043 2.57603 4.95866 4.02245 3.48587C5.46886 2.01308 7.43567 1.167 9.4996 1.1297ZM7.86417 11.5628L5.9356 9.63256C5.77774 9.47415 5.6891 9.25962 5.6891 9.03599C5.6891 8.81235 5.77774 8.59782 5.9356 8.43941C6.09427 8.28171 6.30889 8.19319 6.5326 8.19319C6.75631 8.19319 6.97094 8.28171 7.1296 8.43941L8.48817 9.7997L11.8696 6.41827C12.028 6.26041 12.2425 6.17177 12.4662 6.17177C12.6898 6.17177 12.9043 6.26041 13.0627 6.41827C13.2204 6.57679 13.3089 6.79127 13.3089 7.01484C13.3089 7.23841 13.2204 7.45289 13.0627 7.61141L9.08389 11.5903C9.00312 11.6706 8.90695 11.7338 8.80115 11.7761C8.69535 11.8184 8.5821 11.8389 8.46819 11.8363C8.35428 11.8338 8.24207 11.8082 8.13827 11.7612C8.03448 11.7142 7.94125 11.6468 7.86417 11.5628Z" fill="#36B37E"/>
                        </svg>
                      </div>`;
        
      });
    });
  }




  const editManuallyBtn = document.querySelectorAll('.edit-manually-btn-wrapper');
  const checkboxInput = document.querySelectorAll('.checkbox-input')
  // const sellectAllInputBoxWrapper = document.querySelectorAll('.sellect-all-wrapper')

  // sellectAllInputBoxWrapper.forEach(sellectCheckbox  => {
  //        sellectCheckbox.addEventListener('click', () => {
  //         console.log(sellectCheckbox.children[0].checked);
  //        })
  // })

 if(editManuallyBtn && checkboxInput) {
  editManuallyBtn.forEach(item => {

    

    item.addEventListener('click', () => {
      const childrens = item.parentElement.parentElement.children[2].children
  
     for(let i of childrens) {
   
      i.children[0].style.display = 'flex'
     }

      checkboxInput.forEach(element => {
        
      

        element.addEventListener('click', () => {
          const isChecked = element.children[0].checked
          if(isChecked){
            element.parentElement.children[1].children[0].removeAttribute("readonly")
          element.parentElement.children[2].children[0].children[0].removeAttribute("readonly")
          }else {
            element.parentElement.children[1].children[0].setAttribute("readonly", "true")
            element.parentElement.children[2].children[0].children[0].setAttribute("readonly" , "true")
          }
          
        })
      })
      
      
    })
  })
 }



//  ========= checkout select =============//

$(document).ready(function() {
  $('.checkout-select select').niceSelect();
  $('.checkout-sales-payment-right .input-1 select').niceSelect();
  $('.labels-container select').niceSelect();
 
  
});


// =========client dashboard input checkbox functionality===============//

const clientDashboardPriceEditContainer = document.querySelectorAll('.client-dashboard-checkbox-input')

if(clientDashboardPriceEditContainer) {
  clientDashboardPriceEditContainer.forEach(item => {
    item.addEventListener('click', () => {
     if(item.checked) {
      //  console.log(item.parentElement.children[1].children[0]);
       item.parentElement.children[1].children[0].removeAttribute("readonly")
   
      
     }else{
       item.parentElement.children[1].children[0].setAttribute("readonly", "true")
     }
    })
   
     
   })
   
}


// ============= dashboard sidebar toggle ============ //

let toggle = true

const navContainer = document.getElementById('dashboard-nav-icon')
const dashboardSidebar = document.getElementById('dashboard-left-sidebar')

if(navContainer && dashboardSidebar) {
  navContainer.addEventListener('click', () => {
    event.stopPropagation()
    if(toggle) {
      dashboardSidebar.style.transform = "translateX(0%)";
      toggle = false
      navContainer.innerHTML = `<svg  xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30">
        <path d="M 7 4 C 6.744125 4 6.4879687 4.0974687 6.2929688 4.2929688 L 4.2929688 6.2929688 C 3.9019687 6.6839688 3.9019687 7.3170313 4.2929688 7.7070312 L 11.585938 15 L 4.2929688 22.292969 C 3.9019687 22.683969 3.9019687 23.317031 4.2929688 23.707031 L 6.2929688 25.707031 C 6.6839688 26.098031 7.3170313 26.098031 7.7070312 25.707031 L 15 18.414062 L 22.292969 25.707031 C 22.682969 26.098031 23.317031 26.098031 23.707031 25.707031 L 25.707031 23.707031 C 26.098031 23.316031 26.098031 22.682969 25.707031 22.292969 L 18.414062 15 L 25.707031 7.7070312 C 26.098031 7.3170312 26.098031 6.6829688 25.707031 6.2929688 L 23.707031 4.2929688 C 23.316031 3.9019687 22.682969 3.9019687 22.292969 4.2929688 L 15 11.585938 L 7.7070312 4.2929688 C 7.5115312 4.0974687 7.255875 4 7 4 z"></path>
    </svg>`
    }else{
      dashboardSidebar.style.transform = "translateX(-200%)";
      toggle = true
      navContainer.innerHTML = ` <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
                          <path d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 Z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 Z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 Z"></path>
                          </svg>`
    }
  
  
  })

  

// hide dashboard on click outside the dashboard area.

// if(dashboardSidebar && navContainer) {
//   document.addEventListener('click', (event) => {
  
//     console.log(dashboardSidebar.contains(event.target));
//     console.log(navContainer.contains(event.bubbles.target));
  
//     if(!dashboardSidebar.contains(event.target) && !navContainer.contains(event.target)) {
//       dashboardSidebar.style.transform = "translateX(-100%)";
  
//       console.log('clicked');
//     }
//   })
  
//   document?.addEventListener("click", function (event) {
//     // Check if the click is outside the dropdown
//     const isClickInside = dashboardSidebar?.contains(event.target) || navContainer?.contains(event.target);
//     if (!isClickInside) {
//       dashboardSidebar.style.transform = "translateX(-100%)";
//       toggle = true
//         navContainer.innerHTML = ` <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
//                             <path d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 Z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 Z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 Z"></path>
//                             </svg>`
//     }
//   });
  
// }



}

// const loginBtn = document.getElementById('login-submit-btn')
// const loginForm = document.getElementById('login-form')



  


// aos initialization
AOS.init();









});
