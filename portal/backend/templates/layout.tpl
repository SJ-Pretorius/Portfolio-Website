      <div id="wrapper_content" class="d-flex flex-fill">
        <aside id="aside-main" class="aside-start aside-hide-xs bg-dark shadow-sm d-flex flex-column px-2 h-auto">

          <!-- sidebar : logo -->
          <div class="py-2 px-3 mb-3 mt-2">
            <a onclick="navbar.dashboard();" href="#">
              <img src="/cms/frontend/core/business.png" height="80" alt="...">
            </a>
          </div>
          <!-- /sidebar : logo -->


          <!-- sidebar : navigation -->
          <div class="aside-wrapper scrollable-vertical scrollable-styled-dark align-self-baseline h-100 w-100">
            <nav class="nav-deep nav-deep-sm nav-deep-dark">
              <ul class="nav flex-column">

                <li class="nav-item active">
                  <a class="nav-link" onclick="navbar.dashboard();" href="#">
                    <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">  
                      <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"></path>  
                      <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"></path>
                    </svg>
                    <span>Dashboard</span>
                  </a>
                </li>

                <li class="nav-title mt-4">
                  <h6 class="mb-0 smaller text-light text-uppercase">Other Stuff</h6>
                </li>

                <li class="nav-item">
                  <a class="nav-link" onclick="navbar.printer();" href="#">
                    <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-earmark-medical" viewBox="0 0 16 16">  
                      <path d="M7.5 5.5a.5.5 0 0 0-1 0v.634l-.549-.317a.5.5 0 1 0-.5.866L6 7l-.549.317a.5.5 0 1 0 .5.866l.549-.317V8.5a.5.5 0 1 0 1 0v-.634l.549.317a.5.5 0 1 0 .5-.866L8 7l.549-.317a.5.5 0 1 0-.5-.866l-.549.317V5.5zm-2 4.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"></path>  
                      <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"></path>
                    </svg>
                    <span>Thermal Printer</span>
                  </a>
                </li>

              </ul>
            </nav>

          </div>
          <!-- /sidebar : navigation -->


          <!-- sidebar : footer -->
          <div class="d-flex flex-column align-self-baseline w-100 py-3 px-3 border-top border-secondary small">
            <span class="small fw-medium text-light mb-2">&copy; SJ Pretorius</span>
            <button class="btn btn-secondary btn-sm px-2" onClick="navbar.logout();">Logout</button>
          </div>
          <!-- /sidebar : footer -->


        </aside>

        <main id="middle" class="flex-fill mx-auto">