import React from "react";

function Header() {
  return (
    <nav className="bg-primary">
        <div className="justify-between flex items-center px-12 py-4">
            <div className="flex items-center gap-4">
                <div className="bg-white rounded-full w-16 h-16"></div>
                <div className="text-white text-lg capitalize">
                    logo company
                </div>
            </div>
            <div className="text-white text-lg capitalize">
                arifin habibi | <div href="#">logout</div>
            </div>
        </div>
    </nav>
  );
}

export default Header;
