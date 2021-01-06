import { useState } from "react";
import Link from "next/link";

import Wrapper from "~/components/shared/Wrapper";
import MenuLink from "./MenuLink";
import Hamburger from "./Hamburger";

import { Header, Navigation, Logo, Avatar, Links } from "./styles";
// import styles from "./styles.module.css";

export default function NavigationMenu(): JSX.Element {
    const [isHamburgerOpen, setIsHamburgerOpen] = useState(false);

    return (
        <Header className={`${isHamburgerOpen ? "disableBackdropFilter" : ""}`}>
            <Wrapper>
                <Navigation>
                    <Link href="/">
                        <Logo>
                            <Avatar
                                alt="Gabriel Vilar"
                                height={36}
                                src="http://cogumm.net/images/itsme.jpg"
                                width={36}
                            />
                            Gabriel Vilar
                        </Logo>
                    </Link>

                    <Links>
                        <li>
                            <MenuLink href="/blog" text="Blog" />
                        </li>

                        <li>
                            <MenuLink href="/about" text="About" />
                        </li>

                        <li>
                            <MenuLink href="/opensource" text="Open Source" />
                        </li>
                    </Links>

                    <Hamburger
                        isOpen={isHamburgerOpen}
                        setIsOpen={setIsHamburgerOpen}
                    />
                </Navigation>
            </Wrapper>
        </Header>
    );
}
