<?php
class AuthorRepository
{

    private AuthorMapper $authorMapper;

    public function __construct(
        private PDO $db,
    ) {
        $this->authorMapper = new AuthorMapper();
    }


    public function findById(int $id): Author
    {
        $request = $this->db->prepare("SELECT * FROM author WHERE id = :id");
        $request->execute([
            ":id" => $id
        ]);

        $authorDatas = $request->fetch(PDO::FETCH_ASSOC);

        return $this->authorMapper->mapToObject($authorDatas);
    }
}
