<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <a class="nav-link font-weight-bold" href="/">Library</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
    <!-- Member in dropdown--->

    @if(Session::has('user'))
          
        
      <div>
        <li class="dropdown">
          <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Member
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/memberregister">Register</a>
            <a class="dropdown-item" href="/membersetting">Manage</a>
          </div>
         </li>
      </div>

    @else
    
    @endif
    </ul>


  <!-- Isuue Book-->
     
    <!-- Member in dropdown--->

    @if(Session::has('user'))
          
        
      <div>
        <li class="dropdown">
          <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Issue Books
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/issuebook">Issue New Book</a>
            <a class="dropdown-item" href="/issuedbook">Manage Issued Book</a>
          </div>
         </li>
      </div>

    @else
    
    @endif
    </ul>

  </div>

 
      <!-- log in dropdown--->

      @if(Session::has('user'))
          
        
      <div>
        <li class="dropdown">
          <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Session::get('user')['name'] }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/logout">Log Out</a>
          </div>
         </li>
      </div>

    @else
    <a href="/login">SIGNUP/LOGIN</a>
    
    @endif
    </ul>

  </div>

  

</nav>

