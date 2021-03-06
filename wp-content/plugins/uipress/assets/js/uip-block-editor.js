import { BlockControls } from "@wordpress/block-editor";
import { ToolbarGroup, ToolbarButton } from "@wordpress/components";
import { edit } from "@wordpress/icons";

function Edit() {
  return '<BlockControls>\
      <ToolbarGroup>\
        <ToolbarButton icon={edit} label="Edit" onClick={() => alert("Editing")} />\
      </ToolbarGroup>\
    </BlockControls>';
}
