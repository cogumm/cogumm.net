import React from "react";
import Link from "next/link";

import SEO from "~/components/SEO";
import Wrapper from "~/components/shared/Wrapper";

import { Container, Hadline, Title, Links } from "./styles";

export default function NotFound() {
    return (
        <Wrapper>
            <SEO title="404 | Are you lost ?" shouldExcludeTitleSuffix />
            <Container className="row middle-xs">
                <div>
                    <div className="col-xs-12">
                        <Hadline>Are you lost ?</Hadline>
                        <h2>The page you are looking for doesn't exists.</h2>
                        <Title>Here are some helpful links instead:</Title>
                        <Links>
                            <li>
                                <Link href="/">
                                    <a>Home</a>
                                </Link>
                            </li>
                            <li>
                                <Link href="/blog">
                                    <a>Blog</a>
                                </Link>
                            </li>
                            <li>
                                <Link href="/about">
                                    <a>About</a>
                                </Link>
                            </li>
                        </Links>
                        <h4>Error code: 404</h4>
                    </div>
                </div>
            </Container>
        </Wrapper>
    );
}
