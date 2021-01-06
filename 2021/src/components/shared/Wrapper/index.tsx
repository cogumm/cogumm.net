import React, { ReactNode } from "react";

// import { wrapper, wrapperCompressed } from "./styles";
import styles from "./styles.module.css";

type Props = {
    children: ReactNode;
    isCompressed?: boolean;
};

const Wrapper = ({ children, isCompressed = false }: Props): JSX.Element => (
    <div className={isCompressed ? styles.wrapperCompressed : styles.wrapper}>
        {/* <div className={isCompressed ? `${wrapperCompressed}` : `${wrapper}`}> */}
        {children}
    </div>
);

export default Wrapper;
