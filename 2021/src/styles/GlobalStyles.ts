import { createGlobalStyle } from "styled-components";

interface ITheme {
    theme: {
        bg: {
            background: string;
            backgroundSurface: string;
        };
        text: {
            text: string;
            textSecondary: string;
        };
        colors: {
            secondary: string;
        };
    };
}

export default createGlobalStyle<ITheme>`
    :root {
        --primary: #ff5252;
        --textOnPrimary: #ffffff;
        --textOnSecondary: #ffffff;
        --codeBackground: #121212;
        --languageJavaScript: #fbdd51;
        --languageShell: #89e051;
        --languageCss: #7e57c2;
        --languageHtml: #ff7043;
    }

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
    }

    a {
        color: ${({ theme }) => theme.colors.secondary};
        text-decoration: none;
        cursor: pointer;
    }

    a:hover {
        text-decoration-color: ${({ theme }) => theme.colors.secondary};
        text-decoration-thickness: 0.115em;
        text-decoration: underline;
        text-underline-offset: 1px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        line-height: 1.5;
    }

    h1 {
        font-size: 3em;
        font-weight: 700;
    }

    h2 {
        font-size: 2.5em;
    }

    h3 {
        font-size: 2em;
    }

    h4 {
        font-size: 1.5em;
    }

    h5 {
        font-size: 1.25em;
    }

    h6 {
        font-size: 1em;
    }

    b,
    strong {
        font-weight: 600;
    }

    p {
        font-weight: 400;
    }

    section {
        margin-bottom: 2em;
    }

    li {
        margin: 0.5em;
    }

    blockquote {
        border-left: ${({ theme }) => theme.text.textSecondary} 0.35em solid;
        box-sizing: border-box;
        color: ${({ theme }) => theme.text.textSecondary};
        margin: 1.5em 0;
        padding: 0.25em 0 0.25em 2em;
        font-style: italic;
        font-size: 1em;
    }

    code {
        font-family: Consolas, monospace;
        white-space: pre-wrap;
    }

    hr {
        background-color: ${({ theme }) => theme.bg.backgroundSurface};
        border: none;
        height: 1px;
        margin: 1.5em 0;
    }

    svg {
        width: 24px;
        height: 24px;
        cursor: pointer;
        background: "#24292e";
    }
`;
