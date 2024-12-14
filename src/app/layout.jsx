import "bootstrap/dist/css/bootstrap.css";
import "bootstrap-icons/font/bootstrap-icons.css";
import "./global.css";
import Link from "next/link";

const brandName = "Cornerstone High School Nangabo"

var linkLabels = [
  "Home",
  "About",
  "Academics",
  "Admission",
  "School Life",
  "Contact Us",
];
var links = [
  "home",
  "about",
  "academics",
  "admission",
  "schoollife",
  "contact",
];
var topHeaderLabel = ["News", "E-Learning", "Portal"];
var topHeaderLinks = ["news", "elearning", "portal"];

export default function RootLayout({ children }) {
  return (
    <html lang="en">
      <body>
        <div className="top-header shadow-sm w-100 text-center p-1 rounded-1">
          <div className="socials">
            <button className="whatsapp-btn">
              <i className="bi bi-whatsapp"></i>
            </button>
            <button className="facebook-btn">
              <i className="bi bi-facebook"></i>
            </button>
            <button className="tiktok-btn">
              <i className="bi bi-tiktok"></i>
            </button>
            <button className="instagram-btn">
              <i className="bi bi-instagram"></i>
            </button>
          </div>
          <div>
            <ul className="top-header-links">
              {topHeaderLabel.map((e) => (
                <Link
                key={topHeaderLabel.indexOf(e)}
                  className="nav-link"
                  href={topHeaderLinks[topHeaderLabel.indexOf(e)]}
                >
                  <li>{e}</li>
                </Link>
              ))}
            </ul>
          </div>
          {/*--------- Other links ------------*/}
        </div>
        <nav className="navbar navbar-expand-sm bg-primary my-4">
          <div className="container">
            <a className="navbar-brand fw-bold h6 mb-0 text-white" href="#">
              {brandName}
            </a>
            <button
              className="navbar-toggler d-lg-none"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapsibleNavId"
              aria-controls="collapsibleNavId"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span className="navbar-toggler-icon"></span>
            </button>
            <div className="collapse navbar-collapse" id="collapsibleNavId">
              <ul className="navbar-nav me-auto mt-2 mt-lg-0">
                    {linkLabels.map((e)=><li className="nav-item"><Link key={linkLabels.indexOf(e)} className="nav-link" href={links[linkLabels.indexOf(e)]}>{e}</Link></li>)}
              </ul>
              <form className="d-flex my-2 my-lg-0">
                <input
                style={{outline:"none",boxShadow:"none"}}
                  className="form-control me-sm-2"
                  type="text"
                  placeholder="Search"
                />
                <button
                  className="btn btn-warning my-2 my-sm-0"
                  type="submit"
                >
                  Search
                </button>
              </form>
            </div>
          </div>
        </nav>

        {children}
      </body>
    </html>
  );
}
