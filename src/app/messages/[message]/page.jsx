const messages = require("../../../../database/Models");

export default function Message({ params }) {
  const msgs = messages.MessagesModel();
  return <>
  {
      console.log(msgs)
  }
  </>;
}
