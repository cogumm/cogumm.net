import { Header } from "../components/Header"

import "../styles/home.css"

export function Home(): JSX.Element {
    return (
        <>
            {/* <h1>Página Início</h1> */}
            <Header />
            <section className="home" id="home">
                <div className="name">
                    <span
                    ><span className="light-green">&lt;</span>Gabriel "CoGUMm" Vilar<span
                        className="light-green"
                    >/&gt;</span
                        >
                    </span>
                    <span className="sub-name">Desenvolvedor <span>FrontEnd</span></span>
                    <span className="sub-name">
                        Quadros que dão <span>Vida</span> e <span>Emoção</span>
                    </span>
                </div>

                <div className="start anime">
                    <a href="#overview">
                        <button><i className="fab fa-google-play"></i> Start</button>
                    </a>
                </div>
            </section>
        </>
    )
}
