import React from "react";

const Plans = () => {
  return (
    <>
      <div className="price-container">
        <div className="price left">
          <span>
            $89.99<span className="time-span">/year</span>
          </span>
          <a href="#">WATCH 7-DAYS FREE</a>
        </div>

        <div className="price right">
          <span>
            $8.99<span className="time-span">/month</span>
            <br />
            $9,90
          </span>
          /month
          <a href="#">WATCH 7-DAYS FREE</a>
        </div>
      </div>

      <p>
        Save with an annual subscription. T&Cs apply. Start streaming Disney+.
        No ads, no up-charges.
      </p>
    </>
  );
};

export default Plans;
