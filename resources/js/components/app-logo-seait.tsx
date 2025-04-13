import { ImgHTMLAttributes } from "react";

export default function AppLogoSeait(props: ImgHTMLAttributes<any>) {
    return (
        <img {...props} src={"storage/seait.png"} alt="" />
    );
}