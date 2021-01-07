import styled from "styled-components";

export const Foot = styled.div`
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2.5rem 0;
    border-top: 1px solid ${({ theme }) => theme.bg.backgroundSurface};

    a {
        color: ${({ theme }) => theme.text.text};
        text-decoration: none;
        transition: opacity 0.1s ease-out;
    }

    a:hover {
        opacity: 0.75;
    }

    ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
        display: flex;
    }

    @media (max-width: 400px) {
        flex-direction: column;
    }
`;
