import React from 'react';
import { Link } from 'react-router-dom';

function MainNavbar(props) {
  return (
    <nav className="navbar navbar-expand-lg navbar-light bg-light">
      <a className="navbar-brand" href="#">
        React Hash Navbar
      </a>

      <div className="collapse navbar-collapse" id="navbarNav">
        <ul className="navbar-nav">
          <li className="nav-item active">
            <Link to={'/'} className="nav-link">
              Home <span className="sr-only">(current)</span>
            </Link>
          </li>
          <li className="nav-item">
            <Link to={'/page1'} className="nav-link">
              Page 1
            </Link>
          </li>
          <li className="nav-item">
            <Link to={'/page2'} className="nav-link">
              Page 2
            </Link>
          </li>
        </ul>
      </div>
    </nav>
  );
}

MainNavbar.propTypes = {};

export default MainNavbar;
