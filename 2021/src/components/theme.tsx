import React, { useState, useEffect } from "react";
import { FaSun, FaMoon } from "react-icons/fa";
import { ThemeProvider } from "styled-components";

import GlobalStyles from "../styles/GlobalStyles";
import { ThemeDark, ThemeLight } from "../styles/themes";

export default function Theme({ children }) {
    const [theme, setDarkMode] = useState(false);
    const [mounted, setMounted] = useState(false);

    useEffect(() => {
        const darkModeValue = localStorage.getItem("DARK_MODE");
        setDarkMode(darkModeValue === "true");
        setMounted(true);
    }, []);

    useEffect(() => {
        return localStorage.setItem("DARK_MODE", theme);
    }, [theme]);

    if (!mounted) return <div />;

    return (
        <ThemeProvider theme={theme ? ThemeDark : ThemeLight}>
            <GlobalStyles />
            <button onClick={() => setDarkMode(!theme)}>
                {theme ? <FaSun /> : <FaMoon />}
            </button>
            {children}
        </ThemeProvider>
    );
}
