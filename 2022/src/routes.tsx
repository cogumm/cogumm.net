import {
  BrowserRouter as Router,
  Route,
  Routes
} from "react-router-dom";
import { Home } from "./pages/Home";
// import { Purchase } from "./pages/Purchase";

export function AppRoutes() {
  return (
    <Router>
        <Routes>
            <Route path="/" element={<Home />} />
            {/* <Route path="/purchase" element={<Purchase />} /> */}
        </Routes>
    </Router>
  );
}
