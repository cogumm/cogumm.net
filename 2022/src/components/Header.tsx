import { Menu } from "./Menu";

export function Header(): JSX.Element {
    return (
        <>
            <div id="particles-js"></div>

            <div className="navbar transform" id="navbar"></div>

            <div className="name-scroll transform" id="name-scroll">
                <a href="#home">
                    <span className="light-green">&lt;</span>Gabriel "CoGUMm" Vilar<span
                        className="light-green"
                    >/&gt;</span
                    >
                </a>
            </div>
            <Menu />
        </>
    )
}
