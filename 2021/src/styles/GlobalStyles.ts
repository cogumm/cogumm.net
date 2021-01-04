import { createGlobalStyle } from "styled-components";

export default createGlobalStyle`
    * {
        margin: 0;
        padding: 0;
        transition: .2s ease-out;
    }

    body,
    html {
        background: ${({ theme }) => theme.bg.background};
        color: ${({ theme }) => theme.text.text};
        font-family: Avenir Next, Avenir, -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 1.5;
        margin: 0;
        padding: 0;
    }

    svg {
        width: 24px;
        height: 24px;
        cursor: pointer;
        background: "#24292e";
    }
`;
