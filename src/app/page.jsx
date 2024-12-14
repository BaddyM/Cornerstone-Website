"use client";
import Image from "next/image";
import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";
// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import { useEffect, useState } from "react";
import Link from "next/link";

var carousel = [
  "DSC01988.jpg",
  "DSC02053.jpg",
  "netball_team.jpg",
  "prefects.jpg",
];

var messagesImages = [
  "PHOTO-2024-04-05-11-38-04.png",
  "PHOTO-2022-08-09-07-51-21.png",
  "IMG-20241112-WA0105.jpg",
  "PHOTO-2024-11-19-15-43-14.jpg",
  "IMG-20241105-WA0216.jpg",
];

var messagesLabels = [
  "Founding Director",
  "Managing Director",
  "Head Teacher",
  "Deputy Headteacher",
  "Director of Studies",
];

export default function Page() {
  useEffect(() => {
    let screenWidth = screen.width;

    // init Swiper:
    const swiper = new Swiper(".swiper", {
      // configure Swiper to use modules
      modules: [Navigation, Pagination],
      slidesPerView: screenWidth <= 768 ? 1 : 3,
      direction: "horizontal",
      loop: true,
      autoplay: {
        delay: 3000,
      },

      // If we need pagination
      pagination: {
        el: ".swiper-pagination",
      },

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

      // And if we need scrollbar
      scrollbar: {
        el: ".swiper-scrollbar",
      },
    });
  }, []);

  return (
    <div className="container-fluid">
      <div className="swiper shadow-sm bg-white">
        <div className="swiper-wrapper">
          {carousel.map((e) => (
            <div key={carousel.indexOf(e)} className="swiper-slide text-center">
              <Image
                width={400}
                height={400}
                alt={`Carousel_Image`}
                src={require(`../../public/images/carousel/${e}`)}
              ></Image>
            </div>
          ))}
        </div>

        <div className="swiper-pagination"></div>
        <div className="swiper-button-prev"></div>
        <div className="swiper-button-next"></div>

        <div className="swiper-scrollbar"></div>
      </div>
      {/*---------------- Swiper ---------------------------*/}

      <div className="bg-white row justify-content-around my-3 py-3 w-100">
        {messagesLabels.map((e) => (
          <div key={messagesLabels.indexOf(e)} className="col-md-2 mb-4">
            <div className="card shadow border-0">
                <p className="mb-2 text-center p-1">{messagesLabels[messagesLabels.indexOf(e)]}</p>
              <div className="text-center pt-2">
                <Image
                  width={"100%"}
                  height={"300"}
                  className="img-fluid text-center"
                  objectFit="contain"
                  alt={`${e}`}
                  src={require(`../../public/images/messages/${
                    messagesImages[messagesLabels.indexOf(e)]
                  }`)}
                />
              </div>
              <div className="card-body">
                <div className="text-center">
                    <Link href={`/messages/${e}`} className="btn btn-primary w-100 rounded-0 bg-gradient">Message</Link>
                </div>
              </div>
            </div>
          </div>
        ))}
      </div>
    </div>
  );
}
