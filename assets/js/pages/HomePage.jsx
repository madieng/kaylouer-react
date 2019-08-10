import React from "react";

const HomePage = props => {
  return (
    <>
      <div className="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 className="display-4">Recherche d'un trajet</h1>
        <p className="lead">
          Quickly build an effective pricing table for your potential customers
          with this Bootstrap example. It's built with default Bootstrap
          components and utilities with little customization.
        </p>
      </div>
      <div className="container py-5">
        <form>
          <div className="row">
            <div className="col-5">
              <input
                type="text"
                className="form-control form-control-lg"
                placeholder="Date de départ"
              />
            </div>
            <div className="col-5">
              <input
                type="text"
                className="form-control form-control-lg"
                placeholder="Date d'arrivée"
              />
            </div>
            <div className="col-2">
              <button type="button" className="btn btn-success btn-lg">
                Rechercher
              </button>
            </div>
          </div>
        </form>
      </div>
      {/* Ads */}
      <div className="container">
        <div className="jumbotron px-0 py-3">
          <div className="row">
            <div className="col-md-4 col-xs-12 col-sm-6 col-lg-4">
              <img
                src="https://randomuser.me/api/portraits/men/66.jpg"
                alt="stack photo"
                className="img w-50"
              />
              <div className="w-100 ">Mamaou Ndiaye</div>
            </div>
            <div className="col-md-8 col-xs-12 col-sm-6 col-lg-8">
              <div className="container h5">
                <div className="row align-items-center">
                  <div className="col-4 text-left">
                    Départ: <strong>Thiès</strong>
                  </div>
                  <div className="col-4 text-left">
                    Arrivée: <b>Dakar</b>
                  </div>
                  <div className="col-4 text-right text-primary h4">
                    5 places
                  </div>
                </div>
              </div>
              <hr />
              <div className="container">
                <div className="row">
                  <div className="col text-left">
                    <i className="fas fa-car" /> Renault Modus 2008
                  </div>
                </div>
                <div className="w-100 py-2 text-justify">
                  Quickly build an effective pricing table for your potential
                  customers with this Bootstrap example. It's built with default
                  Bootstrap components and utilities with little customization.
                </div>
                <div className="row">
                  <div className="col-6 text-left text-primary h4 my-2">
                    13h30
                  </div>
                  <div className="col-6 text-right">
                    <button type="button" className="btn btn-primary mx-2">
                      Détails
                    </button>
                    <button type="button" className="btn btn-success">
                      Réserver
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className="container">
        <div className="jumbotron px-0 py-3">
          <div className="row">
            <div className="col-md-4 col-xs-12 col-sm-6 col-lg-4">
              <img
                src="https://randomuser.me/api/portraits/men/15.jpg"
                alt="stack photo"
                className="img w-50"
              />
              <div className="w-100 ">Mamaou Ndiaye</div>
            </div>
            <div className="col-md-8 col-xs-12 col-sm-6 col-lg-8">
              <div className="container h5">
                <div className="row align-items-center">
                  <div className="col-4 text-left">
                    Départ: <strong>Thiès</strong>
                  </div>
                  <div className="col-4 text-left">
                    Arrivée: <b>Dakar</b>
                  </div>
                  <div className="col-4 text-right text-primary h4">
                    5 places
                  </div>
                </div>
              </div>
              <hr />
              <div className="container">
                <div className="row">
                  <div className="col text-left">
                    <i className="fas fa-car" /> Renault Modus 2008
                  </div>
                </div>
                <div className="w-100 py-2 text-justify">
                  Quickly build an effective pricing table for your potential
                  customers with this Bootstrap example. It's built with default
                  Bootstrap components and utilities with little customization.
                </div>
                <div className="row">
                  <div className="col-6 text-left text-primary h4 my-2">
                    13h30
                  </div>
                  <div className="col-6 text-right">
                    <button type="button" className="btn btn-primary mx-2">
                      Détails
                    </button>
                    <button type="button" className="btn btn-success">
                      Réserver
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className="container">
        <div className="jumbotron px-0 py-3">
          <div className="row">
            <div className="col-md-4 col-xs-12 col-sm-6 col-lg-4">
              <img
                src="https://randomuser.me/api/portraits/men/1.jpg"
                alt="stack photo"
                className="img w-50"
              />
              <div className="w-100 ">Mamaou Ndiaye</div>
            </div>
            <div className="col-md-8 col-xs-12 col-sm-6 col-lg-8">
              <div className="container h5">
                <div className="row align-items-center">
                  <div className="col-4 text-left">
                    Départ: <strong>Thiès</strong>
                  </div>
                  <div className="col-4 text-left">
                    Arrivée: <b>Dakar</b>
                  </div>
                  <div className="col-4 text-right text-primary h4">
                    5 places
                  </div>
                </div>
              </div>
              <hr />
              <div className="container">
                <div className="row">
                  <div className="col text-left">
                    <i className="fas fa-car" /> Renault Modus 2008
                  </div>
                </div>
                <div className="w-100 py-2 text-justify">
                  Quickly build an effective pricing table for your potential
                  customers with this Bootstrap example. It's built with default
                  Bootstrap components and utilities with little customization.
                </div>
                <div className="row">
                  <div className="col-6 text-left text-primary h4 my-2">
                    13h30
                  </div>
                  <div className="col-6 text-right">
                    <button type="button" className="btn btn-primary mx-2">
                      Détails
                    </button>
                    <button type="button" className="btn btn-success">
                      Réserver
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className="container">
        <div className="jumbotron px-0 py-3">
          <div className="row">
            <div className="col-md-4 col-xs-12 col-sm-6 col-lg-4">
              <img
                src="https://randomuser.me/api/portraits/men/3.jpg"
                alt="stack photo"
                className="img w-50"
              />
              <div className="w-100 ">Mamaou Ndiaye</div>
            </div>
            <div className="col-md-8 col-xs-12 col-sm-6 col-lg-8">
              <div className="container h5">
                <div className="row align-items-center">
                  <div className="col-4 text-left">
                    Départ: <strong>Thiès</strong>
                  </div>
                  <div className="col-4 text-left">
                    Arrivée: <b>Dakar</b>
                  </div>
                  <div className="col-4 text-right text-primary h4">
                    5 places
                  </div>
                </div>
              </div>
              <hr />
              <div className="container">
                <div className="row">
                  <div className="col text-left">
                    <i className="fas fa-car" /> Renault Modus 2008
                  </div>
                </div>
                <div className="w-100 py-2 text-justify">
                  Quickly build an effective pricing table for your potential
                  customers with this Bootstrap example. It's built with default
                  Bootstrap components and utilities with little customization.
                </div>
                <div className="row">
                  <div className="col-6 text-left text-primary h4 my-2">
                    13h30
                  </div>
                  <div className="col-6 text-right">
                    <button type="button" className="btn btn-primary mx-2">
                      Détails
                    </button>
                    <button type="button" className="btn btn-success">
                      Réserver
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className="container">
        <div className="jumbotron px-0 py-3">
          <div className="row">
            <div className="col-md-4 col-xs-12 col-sm-6 col-lg-4">
              <img
                src="https://randomuser.me/api/portraits/men/6.jpg"
                alt="stack photo"
                className="img w-50"
              />
              <div className="w-100 ">Mamaou Ndiaye</div>
            </div>
            <div className="col-md-8 col-xs-12 col-sm-6 col-lg-8">
              <div className="container h5">
                <div className="row align-items-center">
                  <div className="col-4 text-left">
                    Départ: <strong>Thiès</strong>
                  </div>
                  <div className="col-4 text-left">
                    Arrivée: <b>Dakar</b>
                  </div>
                  <div className="col-4 text-right text-primary h4">
                    5 places
                  </div>
                </div>
              </div>
              <hr />
              <div className="container">
                <div className="row">
                  <div className="col text-left">
                    <i className="fas fa-car" /> Renault Modus 2008
                  </div>
                </div>
                <div className="w-100 py-2 text-justify">
                  Quickly build an effective pricing table for your potential
                  customers with this Bootstrap example. It's built with default
                  Bootstrap components and utilities with little customization.
                </div>
                <div className="row">
                  <div className="col-6 text-left text-primary h4 my-2">
                    13h30
                  </div>
                  <div className="col-6 text-right">
                    <button type="button" className="btn btn-primary mx-2">
                      Détails
                    </button>
                    <button type="button" className="btn btn-success">
                      Réserver
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};

export default HomePage;
