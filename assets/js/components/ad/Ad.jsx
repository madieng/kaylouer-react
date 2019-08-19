import React from "react";
import dateService from "./../../services/date.service";

const Ad = props => {
  const {
    user,
    departure,
    arrival,
    nbrPlaces,
    description,
    departureDate,
    departureHour
  } = props.ad;
  const { fullName, avatar } = user;

  return (
    <div className="container">
      <div className="jumbotron px-0 py-3">
        <div className="row">
          <div className="col-md-4 col-xs-12 col-sm-6 col-lg-4">
            <img src={avatar} alt={user.fullName} className="img w-50" />
            <div className="w-100 ">{user.fullName}</div>
          </div>
          <div className="col-md-8 col-xs-12 col-sm-6 col-lg-8">
            <div className="container">
              <div className="row align-items-center">
                <div className="col-5 text-left">
                  Départ: <strong>{departure}</strong>
                </div>
                <div className="col-5 text-left">
                  Arrivée: <b>{arrival}</b>
                </div>
                <div className="col-2 text-right text-primary">
                  {nbrPlaces} places
                </div>
              </div>
            </div>
            <hr />
            <div className="container">
              {/* <div className="row">
              <div className="col text-left">
                {ad.car && (
                  <>
                    <i className="fas fa-car" /> {ad.car[0].marque}{" "}
                    {ad.car[0].modele} {ad.car[0].year}
                  </>
                )}
              </div>
            </div> */}
              <div className="w-100 py-2 text-justify description">
                {description}
              </div>
              <div className="row">
                <div className="col-6 text-left text-primary my-2">
                  {dateService.formatDate(departureDate)} à{" "}
                  {dateService.formatHour(departureHour)}
                </div>
                <div className="col-6 text-right">
                  <button type="button" className="btn btn-primary btn-sm mx-2">
                    Détails
                  </button>
                  <button type="button" className="btn btn-success btn-sm">
                    Réserver
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Ad;
