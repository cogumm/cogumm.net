import styled from "styled-components";

export const Header = styled.header`
    top: 0;
    z-index: 1;

    backdrop-filter: saturate(180%) blur(20px);
    box-shadow: 0 4px 12px 0 rgba(0, 0, 0, 0.12);
    background-color: ${({ theme }) => theme.bg.backgroundWithTransparency};
    padding: 0.75em 0;
    position: sticky;

    @media (max-width: 768px) {
        padding: 0.5em 0;
        /* box-shadow: none; */
    }
`;

export const Navigation = styled.nav`
    align-items: center;
    display: flex;
    justify-content: space-between;

    /*
        On Chrome Desktop, setting a backdrop-filter makes the fixed children
        position relative to parent. Works good on Chrome mobile, so this is weird.
        https://stackoverflow.com/questions/52937708/why-does-applying-a-css-filter-on-the-parent-break-the-child-positioning
    */
    /* .disableBackdropFilter {
        backdrop-filter: unset;
    } */
`;

export const Logo = styled.a`
    display: flex;
    align-items: center;
    color: ${({ theme }) => theme.text.text};
    font-size: 1.15rem;
    font-weight: bold;
    text-decoration: none;

    &:hover {
        text-decoration: inherit;
    }
`;

export const Avatar = styled.img`
    border-radius: 50%;
    margin-right: 1rem;
`;

export const Links = styled.ul`
    list-style-type: none;
    display: flex;
    margin: 0;

    > li {
        margin: 0;
    }

    @media (max-width: 768px) {
        display: none;
    }
`;
