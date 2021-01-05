import Head from "next/head";

interface SEOProps {
    title: string;
    description?: string;
    image?: string;
    shouldExcludeTitleSuffix?: boolean;
    shouldIndexPage?: boolean;
}

export default function SEO({
    title,
    description,
    image,
    shouldExcludeTitleSuffix = false,
    shouldIndexPage = true,
}: SEOProps) {
    const pageTitle = `${title} ${
        !shouldExcludeTitleSuffix
            ? "| Not better, not worse, just different!"
            : ""
    }`;
    const pageImage = image
        ? `${process.env.NEXT_PUBLIC_SITE_URL}/${image}`
        : null;

    return (
        <Head>
            <title>{pageTitle}</title>

            {description && <meta name="description" content={description} />}
            {image && <meta name="image" content={pageImage} />}

            {!shouldIndexPage && (
                <meta name="robots" content="noindex,nofollow" />
            )}

            <meta httpEquiv="x-ua-compatible" content="IE=edge,chrome=1" />
            <meta name="MobileOptimized" content="320" />
            <meta name="HandheldFriendly" content="True" />
            {/* <meta name="theme-color" content="#121214" /> */}
            <meta name="msapplication-TileColor" content="#121214" />
            <meta name="referrer" content="no-referrer-when-downgrade" />
            <meta name="google" content="notranslate" />

            {/* Meta tag Facebook */}
            <meta property="og:title" content={pageTitle} />
            <meta property="og:description" content={description} />
            <meta property="og:locale" content="pt_BR" />
            <meta property="og:type" content="website" />
            <meta property="og:site_name" content={pageTitle} />
            <meta property="og:image" content={pageImage} />
            <meta property="og:image:secure_url" content={pageImage} />
            <meta property="og:image:alt" content="Thumbnail" />
            <meta property="og:image:type" content="image/png" />
            <meta property="og:image:width" content="1200" />
            <meta property="og:image:height" content="630" />

            {/* Meta tag Twitter */}
            <meta name="twitter:title" content={pageTitle} />
            <meta name="twitter:card" content="summary_large_image" />
            <meta name="twitter:site" content="@cogumm" />
            <meta name="twitter:creator" content="@cogumm" />
            <meta name="twitter:image" content={pageImage} />
            <meta name="twitter:image:src" content={pageImage} />
            <meta name="twitter:image:alt" content="Thumbnail" />
            <meta name="twitter:image:width" content="1200" />
            <meta name="twitter:image:height" content="620" />
        </Head>
    );
}
