import React from "react";
import Link from "next/link";

import Wrapper from "../../Wrapper";

import { Foot } from "./styles";

export default function Footer(): JSX.Element {
    return (
        <footer>
            <Wrapper>
                <Foot>
                    <strong>
                        <Link href="/">
                            <a>cogumm.net</a>
                        </Link>
                    </strong>
                    <ul>
                        <li>
                            <a
                                href="https://github.com/cogumm"
                                rel="noopener noreferrer"
                                target="_blank"
                            >
                                GitHub
                            </a>
                        </li>
                        <li>
                            <a
                                href="https://twitter.com/cogumm"
                                rel="noopener noreferrer"
                                target="_blank"
                            >
                                Twitter
                            </a>
                        </li>
                        <li>
                            <a
                                href="https://linkedin.com/in/cogumm"
                                rel="noopener noreferrer"
                                target="_blank"
                            >
                                LinkedIn
                            </a>
                        </li>
                    </ul>
                </Foot>
            </Wrapper>
        </footer>
    );
}
