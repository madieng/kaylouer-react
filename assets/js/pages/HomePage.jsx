import React, { useEffect, useState } from "react";
import adService from "./../services/ad.service";
import Ad from "../components/ad/Ad";

const HomePage = props => {
  const [ads, setAds] = useState([]);
  useEffect(() => {
    findAll();
  }, []);

  const findAll = async () => {
    const datas = await adService.findAll();
    setAds(datas);
  };

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
      {ads.map(ad => (
        <Ad ad={ad} key={ad.id} />
      ))}
    </>
  );
};

export default HomePage;
