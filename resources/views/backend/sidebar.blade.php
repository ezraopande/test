<nav id="sidebar" class="sidebar-wrapper">

          <!-- App brand starts -->
          <div class="app-brand p-4">
            <a href="index.html">
              
           @if ($settings->logo)
                           
              <img src="{{ asset('storage/' . $settings->logo) }}" alt="Site Logo" class="img-fluid mt-2" width="70">
          @endif
            </a>
          </div>
          <!-- App brand ends -->

      

          <!-- Sidebar menu starts -->
          <div class="sidebarMenuScroll">
            <ul class="sidebar-menu">
              <li class="active current-page">
                <a href="/dashboard">
                  <i class="bi bi-pie-chart"></i>
                  <span class="menu-text">Dashboard</span>
                </a>
              </li>
              <li>
                <a href="analytics.html">
                  <i class="bi bi-bar-chart-line"></i>
                  <span class="menu-text">Analytics</span>
                </a>
              </li>
              <li>
                <a href="widgets.html">
                  <i class="bi bi-box"></i>
                  <span class="menu-text">Widgets</span>
                </a>
              </li>
              <li>
                <a href="calendar.html">
                  <i class="bi bi-calendar2"></i>
                  <span class="menu-text">Calendar</span>
                </a>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-stickies"></i>
                  <span class="menu-text">Components</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="accordions.html">Accordions</a>
                  </li>
                  <li>
                    <a href="alerts.html">Alerts</a>
                  </li>
                  <li>
                    <a href="avatars.html">Avatars</a>
                  </li>
                  <li>
                    <a href="buttons.html">Buttons</a>
                  </li>
                  <li>
                    <a href="badges.html">Badges</a>
                  </li>
                  <li>
                    <a href="carousel.html">Carousel</a>
                  </li>
                  <li>
                    <a href="list-items.html">List Items</a>
                  </li>
                  <li>
                    <a href="progress.html">Progress Bars</a>
                  </li>
                  <li>
                    <a href="placeholders.html">Placeholders</a>
                  </li>
                  <li>
                    <a href="popovers.html">Popovers</a>
                  </li>
                  <li>
                    <a href="spinners.html">Spinners</a>
                  </li>
                  <li>
                    <a href="tooltips.html">Tooltips</a>
                  </li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-ui-checks-grid"></i>
                  <span class="menu-text">Forms</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="form-inputs.html">Form Inputs</a>
                  </li>
                  <li>
                    <a href="form-checkbox-radio.html">Checkbox &amp; Radio</a>
                  </li>
                  <li>
                    <a href="form-file-input.html">File Input</a>
                  </li>
                  <li>
                    <a href="form-validations.html">Validations</a>
                  </li>
                  <li>
                    <a href="form-tabs.html">Form Tabs</a>
                  </li>
                  <li>
                    <a href="form-accordions.html">Form Accordions</a>
                  </li>
                  <li>
                    <a href="input-masks.html">Input Masks</a>
                  </li>
                  <li>
                    <a href="input-tags.html">Input Tags</a>
                  </li>
                  <li>
                    <a href="date-time-pickers.html">Date Time Pickers</a>
                  </li>
                  <li>
                    <a href="form-layouts.html">Form Layouts</a>
                  </li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-window-sidebar"></i>
                  <span class="menu-text">Invoices</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="create-invoice.html">Create Invoice</a>
                  </li>
                  <li>
                    <a href="view-invoice.html">View Invoice</a>
                  </li>
                  <li>
                    <a href="invoice-list.html">Invoice List</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="tables.html">
                  <i class="bi bi-border-all"></i>
                  <span class="menu-text">Tables</span>
                </a>
              </li>
              <li>
                <a href="notifications.html">
                  <i class="bi bi-calendar4"></i>
                  <span class="menu-text">Notifications</span>
                </a>
              </li>
              <li>
                <a href="subscribers.html">
                  <i class="bi bi-check-circle"></i>
                  <span class="menu-text">Subscribers</span>
                </a>
              </li>
              <li>
                <a href="contacts.html">
                  <i class="bi bi-wallet2"></i>
                  <span class="menu-text">Contacts</span>
                </a>
              </li>
              <li>

              <a class="nav-link" href="{{ route('settings.edit') }}">

              <i class="bi bi-gear"></i>
                  <span class="menu-text">Settings</span>
                
            </a>
                
              </li>
              <li>
                <a href="profile.html">
                  <i class="bi bi-person"></i>
                  <span class="menu-text">Profile</span>
                </a>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-code-square"></i>
                  <span class="menu-text">Cards</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="cards.html">Cards</a>
                  </li>
                  <li>
                    <a href="advanced-cards.html">Advanced Cards</a>
                  </li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-pie-chart"></i>
                  <span class="menu-text">Graphs</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="apex.html">Apex</a>
                  </li>
                  <li>
                    <a href="morris.html">Morris</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="maps.html">
                  <i class="bi bi-pin-map"></i>
                  <span class="menu-text">Maps</span>
                </a>
              </li>
              <li>
                <a href="tabs.html">
                  <i class="bi bi-slash-square"></i>
                  <span class="menu-text">Tabs</span>
                </a>
              </li>
              <li>
                <a href="modals.html">
                  <i class="bi bi-terminal"></i>
                  <span class="menu-text">Modals</span>
                </a>
              </li>
              <li>
                <a href="icons.html">
                  <i class="bi bi-textarea"></i>
                  <span class="menu-text">Icons</span>
                </a>
              </li>
              <li>
                <a href="typography.html">
                  <i class="bi bi-explicit"></i>
                  <span class="menu-text">Typography</span>
                </a>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-upc-scan"></i>
                  <span class="menu-text">Login/Signup</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="login.html">Login</a>
                  </li>
                  <li>
                    <a href="signup.html">Signup</a>
                  </li>
                  <li>
                    <a href="forgot-password.html">Forgot Password</a>
                  </li>
                  <li>
                    <a href="reset-password.html">Reset Password</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="page-not-found.html">
                  <i class="bi bi-exclamation-diamond"></i>
                  <span class="menu-text">Page Not Found</span>
                </a>
              </li>
              <li>
                <a href="maintenance.html">
                  <i class="bi bi-exclamation-octagon"></i>
                  <span class="menu-text">Maintenance</span>
                </a>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-code-square"></i>
                  <span class="menu-text">Multi Level</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="#!">Level One Link</a>
                  </li>
                  <li>
                    <a href="#!">
                      Level One Menu
                      <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="treeview-menu">
                      <li>
                        <a href="#!">Level Two Link</a>
                      </li>
                      <li>
                        <a href="#!">Level Two Menu
                          <i class="bi bi-chevron-right"></i>
                        </a>
                        <ul class="treeview-menu">
                          <li>
                            <a href="#!">Level Three Link</a>
                          </li>
                          <li>
                            <a href="#!">Level Three Link</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#!">Level One Link</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- Sidebar menu ends -->

        </nav>