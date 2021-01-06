import styled from "styled-components";

export const Hamburger = styled.div`
    @media (min-width: 769px) {
        display: none;
    }
`;

export const Menu = styled.nav`
    background: ${({ theme }) => theme.bg.background};
    bottom: 0;
    left: 0;
    position: fixed;
    right: 0;
    top: 0;
`;

export const Links = styled.ul`
    align-items: center;
    display: flex;
    flex: 1;
    height: 100%;
    justify-content: center;
    margin: 0;
    padding: 0;
    list-style-type: none;
    font-size: 2rem;
    flex-direction: column;
`;

export const Button = styled.button`
    background-color: transparent;
    border: none;
    color: inherit;
    color: var(--text);
    cursor: pointer;
    display: flex;
    font: inherit;
    margin: 0;
    padding: 0.75rem;
`;

export const CloseContainer = styled.div`
    padding: 0.5em 1.5rem;
    position: absolute;
    right: 0;
`;
