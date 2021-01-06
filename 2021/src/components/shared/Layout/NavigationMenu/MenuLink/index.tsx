import Link from "next/link";
import { useRouter } from "next/router";

import { Links } from "./styles";
import styles from "./styles.module.css";

type Props = { href: string; text: string };

export default function MenuLink(props: Props): JSX.Element {
    const router: { pathname: string } = useRouter();
    const isUserOnLinkPage: boolean = props.href === router.pathname;

    if (!props.href.startsWith("/")) {
        return (
            <Links href={props.href} rel="noopener noreferrer" target="_blank">
                {props.text}
            </Links>
        );
    }

    return (
        <Link href={props.href}>
            <Links
                className={[isUserOnLinkPage && styles.linkActive].join(" ")}
            >
                {props.text}
            </Links>
        </Link>
    );
}
