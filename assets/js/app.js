import React from "react";
import ReactDOM from "react-dom";
import Navbar from "./components/navbar/Navbar";
import { HashRouter, Route, Switch } from "react-router-dom";
import HomePage from "./pages/HomePage";
import Footer from "./components/footer/Footer";

require("../css/bootstrap.min.css");
require("../css/app.css");

const App = props => {
  return (
    <HashRouter>
      <Navbar />
      <main role="main" className="">
        <Switch>
          <Route path="/" component={HomePage} />
        </Switch>
      </main>
      <Footer />
    </HashRouter>
  );
};

ReactDOM.render(<App />, document.getElementById("app"));
