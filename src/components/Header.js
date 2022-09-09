import React from "react";

const Header = () => {
  return (
    <div>
      <a className="btn" href="#">
        Enter
      </a>
      <div className="main">
        <img className="logo" src="images/logo.svg" alt="Disney Plus Logo" />
        {/* <!-- Header-content --> */}
        <h1>
          The best stories in the world, <br />
          all in one place.
        </h1>
      </div>
    </div>
  );
};

export default Header;
