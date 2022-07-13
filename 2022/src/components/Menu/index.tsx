import "./styles.css"

export function Menu(): JSX.Element {
    return (
        <>
            <a className="scroll-up hidden" href="#home" id="scroll-up" title="Voltar ao topo">
                <i className="fas fa-chevron-up"></i>
            </a>

            <div className="menu hidden" id="menu">
                <ul>
                    <li id="li-menu">
                        <i className="fas fa-bars menu-icon"></i>
                        <ul className="dropdown" aria-label="submenu" id="dropdown">
                            <li>
                                <a href="#home">Início<i className="fas fa-home"></i></a>
                            </li>
                            <li>
                                <a href="#overview">Rivaldo<i className="fas fa-user-circle"></i></a>
                            </li>
                            <li>
                                <a href="#projects">Projetos<i className="fas fa-code"></i></a>
                            </li>
                            <li>
                                <a href="#study">Estudos<i className="fas fa-graduation-cap"></i></a>
                            </li>
                            <li>
                                <a href="#open-source">OpenSource<i style={{ fontWeight: "bold" }} className="fab fa-osi"></i></a>
                            </li>
                            <li>
                                <a href="#facul">Faculdade<i style={{ fontWeight: "bold" }} className="fas fa-user-graduate"></i></a>
                            </li>
                            <li>
                                <a href="#camp">Campeonato<i style={{ fontWeight: "bold" }} className="fas fa-trophy"></i></a>
                            </li>
                            <li>
                                <a href="#about">Sobre<i className="fas fa-address-card"></i></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </>
    )
}
