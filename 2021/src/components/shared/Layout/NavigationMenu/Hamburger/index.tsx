import { useEffect } from "react";
import Router from "next/router";

import MenuLink from "../MenuLink";
import OpenIcon from "./OpenIcon";
import CloseIcon from "./CloseIcon";

import { Hamburger, Menu, Button, CloseContainer, Links } from "./styles";

type Props = { isOpen: boolean; setIsOpen: Function };

export default function Mobile(props: Props) {
    useEffect(() => {
        const onRouteChangeStart = () => {
            props.setIsOpen(false);
        };

        Router.events.on("routeChangeStart", onRouteChangeStart);

        return () => Router.events.off("routeChangeStart", onRouteChangeStart);
    }, []);

    return (
        <Hamburger>
            <Button
                aria-label="Open navigation menu"
                onClick={() => props.setIsOpen(true)}
            >
                <OpenIcon />
            </Button>

            {props.isOpen && (
                <Menu>
                    <CloseContainer>
                        <Button
                            aria-label="Close navigation menu"
                            onClick={() => props.setIsOpen(false)}
                        >
                            <CloseIcon />
                        </Button>
                    </CloseContainer>

                    <Links>
                        <li>
                            <MenuLink href="/" text="Home" />
                        </li>
                        <li>
                            <MenuLink href="/blog" text="Blog" />
                        </li>
                        <li>
                            <MenuLink href="/about" text="About" />
                        </li>
                        <li>
                            <MenuLink href="/opensource" text="Open Source" />
                        </li>
                        <li>
                            <MenuLink
                                href="https://twitter.com/intent/follow?screen_name=cogumm"
                                text="Follow on Twitter"
                            />
                        </li>
                    </Links>
                </Menu>
            )}
        </Hamburger>
    );
}
