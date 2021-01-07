import React from "react";

import Theme from "~/components/theme";
import NavigationMenu from "./NavigationMenu";
import Footer from "./Footer";

export default function Layout({ children }) {
    return (
        <Theme>
            <NavigationMenu />
            {children}
            <Footer />
        </Theme>
    );
}
