import { AiOutlineClockCircle, AiFillCloud } from "react-icons/ai";
import { SiGooglepodcasts } from "react-icons/si";

export const routes = [
  {
    name: "Inicio",
    path: "#",
  },
  {
    name: "Como funciona",
    path: "#como",
  },
  {
    name: "Sobre",
    path: "#querodenunciar",
  },
];

export const analytics = [
  {
    name: "Active users",
    desc: "12M",
  },
  {
    name: "Languages",
    desc: "16",
  },
  {
    name: "Support",
    desc: "24/7",
  },
];

export const features = [
  "Choose a view",
  "Meet your new butler",
  "Dive into the details",
  "Power up",
];

export const controls = [
  {
    name: "Structured Reports",
    icon: SiGooglepodcasts,
  },
  {
    name: "Cloud System",
    icon: AiFillCloud,
  },
  {
    name: "24/7 Support",
    icon: AiOutlineClockCircle,
  },
];
