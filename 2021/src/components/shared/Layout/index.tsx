import React from "react";

import Theme from "~/components/theme";
import NavigationMenu from "./NavigationMenu";

export default function Layout({ children }) {
    return (
        <Theme>
            <NavigationMenu />
            {children}
        </Theme>
    );
}
