import React from "react";

const Navbar = props => {
  return (
    <nav className="navbar navbar-expand-lg navbar-dark bg-primary">
      <a className="navbar-brand" href="#">
        KayLouer
      </a>
      <button
        className="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarColor01"
        aria-controls="navbarColor01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span className="navbar-toggler-icon" />
      </button>

      <div className="collapse navbar-collapse" id="navbarColor01">
        <ul className="navbar-nav mr-auto">
          <li className="nav-item active">
            <a className="nav-link" href="#">
              Accueil <span className="sr-only">(current)</span>
            </a>
          </li>
          <li className="nav-item">
            <a className="nav-link" href="#">
              Les annonces
            </a>
          </li>
          <li className="nav-item">
            <a className="nav-link" href="#">
              Les chauffeurs
            </a>
          </li>
          <li className="nav-item">
            <a className="nav-link" href="#">
              Mes réservations
            </a>
          </li>
        </ul>
        <ul className="nav navbar-nav ml-auto">
          <li className="nav-item">
            <a href="#" className="nav-link">
              Inscription
            </a>
          </li>
          <li className="nav-item m-auto">
            <a href="#" className="btn btn-success btn-sm mr-2">
              Connexion
            </a>
          </li>
          <li className="nav-item m-auto">
            <button type="button" className="btn btn-warning btn-sm">
              Déconnexion
            </button>
          </li>
        </ul>
      </div>
    </nav>
  );
};

export default Navbar;
