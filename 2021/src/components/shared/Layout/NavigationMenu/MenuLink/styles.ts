import styled from "styled-components";

export const Links = styled.a`
    color: ${({ theme }) => theme.text.text};
    text-decoration: none;
    padding: 0.5rem 1rem;
    transition: opacity 0.1s ease-out;

    &:hover {
        text-decoration: inherit;
        opacity: 0.75;
    }
`;
